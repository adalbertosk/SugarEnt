<?php
$diagnostic = $_FILES["diagnostic"] ?? false;
if (!$diagnostic) {
    ?>
    <!DOCTYPE html>
    <html>
    <body>
    <form method="post" enctype="multipart/form-data">
        Diagnostic Tool output:
        <input type="file" name="diagnostic" id="diagnostic">
        <input type="submit" value="Upload" name="submit">
    </form>
    </body>
    </html>
    <?php
    exit (0);
}

$target_file = basename ($diagnostic["name"]);
$fileType = strtolower (pathinfo ($target_file, PATHINFO_EXTENSION));
if ($fileType !== "zip") {
    die ("Only ZIP files are allowed!");
}
$zip = new ZipArchive ();
$res = $zip->open ($diagnostic["tmp_name"]);
if ( $res !== TRUE ) {
    die (sprintf (
        "ZIP Error (%d): Status (%s): Archive (%s))",
        $res,
        $zip->status,
        $diagnostic["tmp_name"],
    ));
}
$dbTables = array (
    "fields_meta_data",
    "config",
    "upgrade_history",
    "versions",
);
foreach ( $dbTables as $dbTable ) {
    $htmlString = $zip->getFromName ("MySQL/TableDumps/{$dbTable}.html");
    $dom = new DOMDocument ();
    @$dom->loadHTML ($htmlString);
    $htmlTables = $dom->getElementsByTagName ("table");
    foreach ($htmlTables as $htmlTableIndex => $htmlTable) {
        if ($htmlTableIndex < 2) {
            continue;
        }
        $htmlRows = $htmlTable->getElementsByTagName ("tr");
        $dbColumns = array ();
        $values = array ();
        foreach ($htmlRows as $htmlRowIndex => $htmlRow) {
            if ($htmlRowIndex === 0) {
                foreach ($htmlRow->getElementsByTagName ("th") as $index => $th) {
                    if ($index > 0) {
                        $dbColumns[] = trim ($th->textContent);
                    }
                }
                $dbColumnStr = " (" . implode (",", $dbColumns) . ")";
            } else {
                $rowString = " (";
                foreach ($htmlRow->getElementsByTagName ("td") as $index => $td) {
                    if ($index > 0) {
                        $value = trim ($td->textContent);
                        $rowString .= (empty ($value) && $value !== "0") || in_array ($value, array (" ", " ", "&nbsp;")) ? "NULL," : "'" . str_replace ("'", "\'", $value) . "',";
                    }
                }
                $values[] = rtrim ($rowString, ",") . ")";
            }
        }
    }
    if (isset ($dbColumnStr) && !empty ($values)) {
        echo "TRUNCATE TABLE {$dbTable};<br />";
        echo "INSERT INTO {$dbTable} {$dbColumnStr} VALUES " . implode (",", $values) . ";<br />";
    }
}
