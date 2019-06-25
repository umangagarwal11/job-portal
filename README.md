# job-portal

DO NOT EDIT OR REMOVE ANY FILES EXCEPT:
'db.php'
'authlogin.php'
'dash.php'
'jobman.php'
'login_page.php'
'logout.php'
'style.css'
'user_home.php'
'user_logout.php'

This is a portal for seeking jobs for a single company(there can be many admins).
The admins(employer) would upload job details using 'dash.php' after they log in and can edit their vacancy in 'jobman.php'.

The applicants(users) can see the job details without loging in, but can apply only after they have registered or logged in.
Whenever an applicant applies to a job, he recieves an email confirming his application.

All the admins can view all the applications in their dashboards and can select or reject an applicant.
Whenever an applicant is selected or rejected they recieve a mail informing them about it.

Requirements:
Wamp server or Xampp server

How to run:
For people using wamp server:
1. Transfer all the files to a new folder named say xyz in the www directory in the wamp server folder.
2. Go to the browser you use and search localhost/xyz/ and select the page you want to open. 


For people using xampp server:
1. Transfer all the files to a new folder named say xyz in the htdocs directory in the xampp server folder.
2. Go to the browser you use and search localhost/xyz/ and select the page you want to open. 

Configure your database details in 'db.php'.
Configure your email id details in 'dash.php' and 'userhome.php'.

Your database should contain the following tables with the following attributes:

1. admintable
  
#	Name	      Type	          Collation	          Attributes	    Null	    Default   	Comments    	            Extra
1	username    varchar(40)	    latin1_swedish_ci		                No	      None		    admin username
2	password	  varchar(40)	    latin1_swedish_ci		                No	      None		    admin password
3	lastlogin	  timestamp			                                      No	      None		    each admin's last login
 
Indexes
Keyname 	Type  	Unique  	Packed  	Column  	  Cardinality 	          Collation 	Null  	Comment
PRIMARY 	BTREE	  Yes	      No	      username	  1	(number of entries)     A	         No	


2. applications


#	Name	        Type	            Collation	          Attributes	   Null  	    Default	      Comments	                    Extra
1	username	    varchar(100)	    latin1_swedish_ci		                No	      None		      Username of the applicant
2	job	          int(40)			                                          No	      None		      job id of the particular job


3. jobtypes


#	Name	    Type	          Collation	          Attributes	    Null	    Default	    Comments	  Extra
1	type     	varchar(40)	    latin1_swedish_ci		                No	      None		

Indexes
Keyname	  Type	    Unique	    Packed	  Column	  Cardinality	           Collation	  Null	  Comment
type	    BTREE	    Yes	        No	       type	    5(number of entries)    A	          No	


4. jobs


#	Name    	    Type	        Collation	          Attributes	     Null	    Default	    Comments	                      Extra
1	type	        varchar(40)	  latin1_swedish_ci		                  No	     None		    job type
2	exp	          varchar(11)	  latin1_swedish_ci		                  No	     None		    experience required
3	domain	      varchar(40)	  latin1_swedish_ci		                  No	     None		    domain of job(eg-ml,app dev)
4	description	  longtext	    latin1_swedish_ci		                  No	     None		    job description
5	salary	      varchar(40)	  latin1_swedish_ci		                  No	     None		    range of salary
6	vacancy	      tinyint(1)			                                    No	     None		    1-vacant,0-not vacant
7	id      	    int(40)			                                        No	     None	     	job id(filled automatically)    AUTO_INCREMENT


Indexes

Keyname	    Type	    Unique	    Packed	    Column	    Cardinality	            Collation	  Null	  Comment
PRIMARY	    BTREE	    Yes	        No	         id	        6(number of entries)     A	        No	


5. usertable


#	Name	        Type	          Collation	          Attributes	  Null	  Default	    Comments	                            Extra
1	fullname	    varchar(100)	  latin1_swedish_ci		              No	    None		    Applicant's name
2	email       	varchar(100)	  latin1_swedish_ci		              No	    None		    Applicant's email id
3	password	    varchar(40)	    latin1_swedish_ci		              No	    None		    Applicant's password
4	no	          bigint(20)			                                  No	    None		    Applicant's contact no.
5	resume	      varchar(100)	  latin1_swedish_ci		              No	    None		    Name of the Applicant's resume file
                                                                                      (also used later for identification)


Indexes

Keyname   	Type    	Unique	    Packed	    Column	    Cardinality	          Collation	    Null  	Comment
PRIMARY	    BTREE	    Yes	        No	        email	      6(number of entries)	 A	          No	
