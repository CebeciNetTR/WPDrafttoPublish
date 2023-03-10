# WPDrafttoPublish
Wordpress draft post to be published randomly whitout plugin and wp cron.

Push to cron.php file wordpress home directory .
Go To Your hosting control panel > cron jobs 
Add a cronjob = wget -q --spider https://yourwordpress.com/cron.php?run=112 >/dev/null 2>&1	 // 112 optional your cron file $safeurl 
Set the desired time period from your cronjob field and add the above code to the operation field.
Now you are ready, your 100s of draft content will be published randomly and automatically in the time interval you set.
