# ManagerWebpage
This project is a simple web site that a manager would use to keep track and add employees into a database.

There are three elements used in this web site: html is used for the front end, php used for back end code, and SQL is used to 
store and query the employee data. The employee data is pulled from the sakila database that is located under the "sakila-db" 
directory.

This code is run using XAMPP server and MySQL workbench. To run the code, place these files under the "XAMPP/htdocs" directory
(where this is located is dependent on what OS you run), open XAMPP server and under the "Manage Servers" tab press the "Start
All" button. Once the server is started, go into your web browser and type "http://localhost:80/[directory_name]/manager.html".
In this case, the [directory_name] is "ManagerWebpage". At this point, the manager web page will be showing in the browser and
the user will now be able to view the employees, add new employees.


NOTE: If you are running this on a Mac OS, you will need to stop the apache that is already running on this system using the
command "sudo apachectl stop". This is because Mac's apache and XAMPP's apache cannot use the same port at the same time.
