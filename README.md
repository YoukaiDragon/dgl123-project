# DGL-123 PROJECT: ADDING PHP TO HTML WEBSITE PROJECT
NOTE: Before checking the website, please remember to import dgl123-project.sql into phpMyAdmin.
This code uses 'root' as the username and '' for the password to connect to the database.
If your instance of phpMyAdmin uses a different username and password, please change all instances
of "conn = mysqli_connect('localhost', 'root', '', 'dgl123-project');" to use your username and password

This project submission makes the following changes to my HTML website project:

1: using templates on all pages

2: changing the store and menu pages to pull their content from a database

3: adding form validation to the contact form

4: storing data from the contact form in a table on the database, and creating a separate page
not connected to the main site, 'list-contacts'php' that displays submitted contact forms,
and allows entries to be marked as having paid for their event, or hiding entries from display

Also included is test-contact.php which runs unit testing on contact.php. Note that, because I don't
know how to include the contact page in the test code while not displaying the html it contains, You will
need to scroll below the content of the contact page to see the test results when running test-contact.php