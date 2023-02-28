-- Active: 1674931803723@@db.ethereallab.app@3306@dtm36
<table><tr><td> <em>Assignment: </em> Init DB Setup</td></tr>
<tr><td> <em>Student: </em> Darian Moore (dtm36)</td></tr>
<tr><td> <em>Generated: </em> 2/27/2023 10:06:40 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/init-db-setup/grade/dtm36" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Reminder: Make sure you start in dev and it's up to date</p><ul><li>git checkout dev</li><li>git pull origin dev</li><li>git checkout -b ProjectSetup</li></ul><p>Steps:</p><ol><li>Create a new folder in public_html called <b>Project </b>if it doesn't exist</li><li>create a new folder in Project called <b>sql</b></li><li>Create a new file in sql called init_db.php</li><li>Paste the content from&nbsp;<a href="https://gist.github.com/MattToegel/6a8310e3ac19fe505870e5ebfa8cf4ea">https://gist.github.com/MattToegel/6a8310e3ac19fe505870e5ebfa8cf4ea</a><ul><li>You will get errors if this is not in the proper location</li></ul></li><li>Create another file in sql called 001_create_table_users.sql</li><li>Paste the content from&nbsp;<a href="https://gist.github.com/MattToegel/f3b39da97fba38bd04fc7073ad0a627e">https://gist.github.com/MattToegel/f3b39da97fba38bd04fc7073ad0a627e</a></li><li>Add/commit/push these to the new branch (if you haven't yet)</li><li>Create the pull request on github but do not complete it yet</li><li>Create a new folder in public_html called <b>M4</b></li><li>Create a new file in the M4 folder called m4_submission.md</li><li>Fill out the below deliverables and paste the generated markdown in the file</li><li>Add/commit/push the new changes</li><li>Verify all of the files appear as expected in the ProjectSetup branch<ol><li>M4/m4_submission.md</li><li>Project/sql/init_db.php</li><li>Project/sql/001_create_table_users.sql</li></ol></li><li>Complete the merge/pull request from step 8</li><li>Create a new pull request from dev to prod and complete it</li><li>Go back to your local repo</li><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li>On github, navigate to the prod branch</li><li>Go to the M4 folder</li><li>Click the m4_submission.md</li><li>Paste that url to Canvas as the submission</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Verify Proper Setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Visit the init_db.php file in the browser on heroku dev and screenshot the working output (If it says blocked this is still valid for the submission)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.paste.pics/f1840f6b5636e14a5bb64491de27ad41.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success status for .sql file.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.paste.pics/f1840f6b5636e14a5bb64491de27ad41.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows it running on local host which professor stated is fine as well<br>on hw video.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Go to your MySQL VS Code extension, click the new table that was generated, screenshot the table shown</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.paste.pics/0f2a12d6a66ef741ab0846b82d748e2d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Ucid as the database<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.paste.pics/0f2a12d6a66ef741ab0846b82d748e2d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Table name with columns shown<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly talk about something you learned (from the readings is preferred over the slides/class)</td></tr>
<tr><td> <em>Response:</em> <p>Overall I learned how to set up an sql file. We never actually<br>got to mess with sql files until now. With the project setup for<br>the sql started we actually got to go through the process of setting<br>up the sql. Outside of that, I was able to organize my files<br>a bit more as well with the addition of this module.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Talk about any issues or difficulties you had in any of the processes and how you resolved them. If you didn't have issues this HW mention a recently resolved issue that wasn't discussed before.</td></tr>
<tr><td> <em>Response:</em> <p>None. The video explained everything well. After following along I did not feel<br>the need to ask the professor any questions.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link (ProjectSetup to Dev)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/8">https://github.com/its-dmoore/IT202_008/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Paste the direct link from heroku prod to the init_db.php file (i.e., https://mt85-prod.herokuapp.com/Project/sql/init_db.php)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-dev.herokuapp.com/Project/sql/init_db.php">https://dtm36-dev.herokuapp.com/Project/sql/init_db.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/init-db-setup/grade/dtm36" target="_blank">Grading</a></td></tr></table>