Magnet Alpha Forum System

All source code, compiled code, Executables, files, documents, modifications, etc, are released under
the Modified Netscape Public License (Version 1.0), of which a copy is enclosed in this directory
under the filename license.txt    


The forum is self-contained, and works all in one directory.
All portions of the Magnet Alpha Forum code is made fully independant of URLs, files, or system
configurations, and should only require minimal configuration to run.

It was written in PHP 5.

In order to store passwords, the filename of the file in which passwords should be stored
must be specified in post.php on line 11 and in usercreate.php on line 10

The usercreate.php script creates users, from the matching form    

The userlogin.php script creates the post dialog, based on if it's a new post
or a reply, and based on if user/password cookies have been set

The Post.php actually posts new forum post with a randomly
generated URL (a unique random number), as well as updates a post page and updates
the activity log
The Post.php script also handles updating posts with replies
