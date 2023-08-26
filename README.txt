Magnet Alpha Forum System

All source code, compiled code, Executables, files, documents, modifications, etc, are released under
the Modified Netscape Public License (Version 1.0), of which a copy is enclosed in this directory
under the filename license.txt    


The Magnet Alpha Forum System is designed to be easily-implemented and easily-configured to
your needs. No big tweaking required, no complex server configurations, the Magnet Alpha forum is 
packed and ready to go. All in one directory, and self-contained, you can just plop it down in the
 middle of any server configuration. It works on nearly all browsers, both new and old, mobile 
and desktop,and is lightweight, guaranteed fast load times. It has been checked over countless 
times for bugs, so there is no worry about having to fix indecipherable script errors.
Remember, you can spend hours, days, on getting a forum system working. Or you can take it the
Magnet way. Take it easy.

     
All portions of the Magnet Alpha Forum code is made fully independant of URLs, files, or system
configurations, and should only require minimul configuration to run, with the following exceptions     
    
The forum system is optimized and configured to run on the 32 bit version of PHP 5   
Have it or a compatible version installed on your server to have the scripts run properly    
    
In order to store passwords, the filename of the file in which passwords should be stored
must be specified in post.php on line 11 and in usercreate.php on line 10



The usercreate.php script creates users, from the matching form    

The userlogin.php script creates the post dialog, based on if it's a new post
or a reply, and based on if user/password cookies have been set

The Post.php actually posts new forum post with a randomly
generated URL (a random number), as well as updates a post page and updates
the activity log
The Post.php script also handles updating posts with replies
