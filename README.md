# HOMEOFFICE
WEB
TITLE: DEVELOPMENT OF A RECRUITMENT PORTAL.                                                                                                                                  LINK ADDRESS:         http://www.eng.northampton.ac.uk/~11406175/HOMEOFFICE/login.html  USERNAME:  admin     PASSWORD: admin                                                                                                                DEVELOPED BY: WASHINGTON BHEBHE

REQUIREMENTS.

The requirements were to design and create a simple website using JavaScript. The website was required to;
1)	show a list of applicants for a job vacancy. 
2)	When you click on a candidate’s name it takes you to more information about that candidate, including a summary of their work experience. 
3)	 Be able to search for a candidate on their name or candidate number.

Design.

The database was designed using MySQL Workbench, the resulting table is shown below in Fig.1
 
Figure 1. Database design.

Implementation.

The Front-End of the website was created in HTML and JavaScript. The Back-End was created using MySQL Database and PHP. The website was uploaded on my University server.

Login

A form is created in HTML for the user to input the username and the password. The action POST sends the input to the JavaScript function for verification. If the credentials are correct then the user goes to the linked page, if not correct, the user has to try again. If the credentials are not correct, the JavaScript alert dialogue box informs the user to try again.

Home Page
This is the home page created in HTML and CSS3. The home page has a menu on the left, guiding the users on-Click to the chosen pages which have been h-referenced.

Applicants Page

This is the Applicants page. A query is used to select all the applicants in the database. The result is shown on the table. The search tool is used to search for the applicants by name or id.

Vacancies Page

This is the result of a query which searches the ROLE table in the database.

Applications Page.

This is the result of the query that joins 2 tables, the Applicant and the Role table. The table shows the candidate names that applied for a particular job. The names can be clicked and the applicant full details are shown in a new page.

Testing .

The testing was carried out against the Requirements.
Test 1: Searching.
This is the result for searching by name. Input W.
 
Test 2: Searching by Applicant id 2,
 
Test 3: Applicants for a job Vacancy.
 
Test 4: When you click on a candidate’s name it takes you to more information about that candidate, including a summary of their work experience.
Test 4: On-Click on Washington.
 






