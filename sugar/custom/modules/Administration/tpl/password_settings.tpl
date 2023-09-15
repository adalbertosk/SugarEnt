<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>

<form action="index.php" method="POST" name="password_settings" id="password_settings">
    <input type="hidden" name="module" value="Administration">
    <input type="hidden" name="action" value="password_settings">
    <input type="hidden" name="process" value="true">
    <input type="hidden" name="return_module" value="{$RETURN_MODULE}">
    <input type="hidden" name="return_action" value="{$RETURN_ACTION}">
    {sugar_csrf_form_token}
    {$TITLE}
    <div class="clear"></div>
    <br />
    <p>{$DESCRIPTION}</p>
    <br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 100px;">{$MOD.LBL_PASSWORD_SETTINGS_URL}</td>
            <td>
                <input id="password_settings_url" name="password_settings_url" style="width: 500px;" type="text" value="{$password_settings_url}" >

            </td>
        </tr>
        <tr>
            <td style="width: 100px;">{$MOD.LBL_PASSWORD_SETTINGS_USERNAME}</td>
            <td>
                <input id="password_settings_username" name="password_settings_username" style="width: 500px;" type="text" value="{$password_settings_username}" >

            </td>
        </tr>
        <tr>
            <td style="width: 100px;">{$MOD.LBL_PASSWORD_SETTINGS_PASSWORD}</td>
            <td>
                <input id="password_settings_password" name="password_settings_password" style="width: 500px;" type="password" value="{$password_settings_password}" >

            </td>
        </tr>
    </table>
    <br>
    <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" type="submit" name="saveButton"value="{$APP.LBL_SAVE_BUTTON_LABEL}" />
    <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='Administration';" type="submit" name="CancelButton" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"/>
</form>