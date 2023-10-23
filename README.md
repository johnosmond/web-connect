# Web Connection
This is a sample database with only one entity - Customers.
The purpose is to demonstrate three ways to connect to a web-based database from Microsoft Access.

## ODBC Table Links
The first method for connecting an Access front-end to a web-based databse is by using ODBC table links.
These can be created in VBA code or they can be created using a DSN. Once created the table links work
the same as if they were connected to SQL Sever.

This requires port 3306 to be opened in the router firewall 
and the IP address of the router be whitelisted on the server.

## ADO Models
The second method is to create ADO connection strings and call them from a class module, thereby creating
a "model" for each table in the web server database.

This also requires port 3306 opened on the router and the IP address be whitelisted.

## RESTful API
The third method is to create a RESTful API on the server and call the methods of the API from Access.

This method is the most challenging, but it is useful because it is the only one that does NOT require
opening any ports on the router and does NOT require whitelisting.

It does, however, require the use of security tokens along with public and private certificate keys. Ouch!

I will be working on these methods and posting videos about my progress on social media.

* <a href="https://www.youtube.com/@prodbdevelopers" target="_blank">YouTube</a>
* <a href="https://www.tiktok.com/@prodbdevelopers" target="_blank">TikTok</a>
* <a href="https://www.linkedin.com/company/prodbdevelopers" target="_blank">LinkedIn</a>
* <a href="https://www.facebook.com/prodbdevelopers" target="_blank">Facebook</a>
* <a href="https://github.com/johnosmond" target="_blank">GitHub</a>