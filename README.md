# PLP-Project
End of course project 
I have worked on a simple registration and login for the Mwalimu Central Database. I have run into a few issues through.
1. I was using an XAMPP server tutorial while I have used a WAMP server. It has sort of worked but I am not sure if the errors I received are because of this.
2. When running the .php code, I ran into a few errors: Notice: Undefined index: password_1 in C:\wamp64\www\PHPMySQLIntegration\server.php on line 20 and when I consulted Dr Google, this was the solution and got and it worked. I input the code: <?php error_reporting(0); ?> at the very beginning of each .php page and it removed all the errors but I am not sure that is the best way forward. 
3. The registration of users seems to work well, however, the authentication of users is not processing well. I am able to register a username and email twice and that should not be the case. It seems the code is broken somewhere and I am not able to tell where.
4. Also with the login, after what I presume is a successful login, it does not give me the welcome message. 

I have attached a screenshot of the users database with the saved users. 

Thank you for your help this far! 
