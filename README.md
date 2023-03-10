# WP Draft to Publish
Wordpress draft post to be published randomly whitout plugin and wp cron.

It allows you to publish your draft posts randomly, without plugins and scheduled tasks for your wordpress sites.

**Install**

Push to cron.php file wordpress home directory .

Go To Your hosting control panel > cron jobs 

Add a cronjob = wget -q --spider https://yourwordpress.com/cron.php?run=112 >/dev/null 2>&1	 // 112 optional your cron file $safeurl 

Set the desired time period from your cronjob field and add the above code to the operation field.

Now you are ready, your 100s of draft content will be published randomly and automatically in the time interval you set.

My home page: https://cebeci.net.tr/

Blog: https://howmake.net/how-to-auto-publish-draft-post-in-wordpress-without-plugin/
