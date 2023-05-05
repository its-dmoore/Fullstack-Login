<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Darian Moore (dtm36)</td></tr>
<tr><td> <em>Generated: </em> 4/26/2023 8:07:09 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/dtm36" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/9553c16dc6208fbd564c6517cc53d217.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/cdba0afadf4cf0ab7ce9f3579e4ccbe5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/c9057063aa809ca565244af704f66885.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Passwords do not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/6e0f74d20b2b4b166bd834e90a29e006.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email not available (already registered)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/800debb4a8d2c244c617b67d9f4e29e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username not available (username is taken)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/31dc066927208b7d8d366c19f7e45521.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Valid data before registration form submission<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/62cc53efcefb73d23227c42b24cbd32f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL showing registration working in heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/2e292f0e4498d80904b26a93553658bb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Valid user data from task 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/11">https://github.com/its-dmoore/IT202_008/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form takes user-given input to create a profile and does this by<br>putting the given data through various authentication checks so that way the data<br>meets our created demands.<div><br></div><div>On the front end, we use HTML to create various<br>requirements.</div><div>Meanwhile, on the backend, we use various conditions and sanitization methods to validate<br>the user&#39;s input.</div><div><br></div><div>Both password and confirm password must not be empty, be at<br>or over 8 characters, and must match.</div><div><br></div><div>The Db is used to store various<br>registered users who then can access contents we created after validating their account<br>through their login information.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/7476424753015652d078b0a896df0d8e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password mismatch validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/f504752b0a7bdbd5f677dd8067809988.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation based on a non-existing user<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/f504752b0a7bdbd5f677dd8067809988.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL is from Heroku Dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/07c82cb139d107db59dbfcfbe1cebae7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login successful and is from heroku dev<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/07c82cb139d107db59dbfcfbe1cebae7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Welcome message saying welcome to the user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/27">https://github.com/its-dmoore/IT202_008/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form takes user-given input to login into an already registered profile and<br>does this by putting the given data through various authentication checks so that<br>way the data meets our already existing demands.<div><br></div><div>On the front end, we use<br>HTML to login based on various requirements.</div><div>Meanwhile, on the backend, we still use<br>various conditions and sanitization methods to validate the user&#39;s login input.</div><div><br></div><div>Both password and<br>confirm password must not be empty, be at or over 8 characters, and<br>must match the login parameters.</div><div><br></div><div>The Db is used to store various registered users<br>who then can access contents we created after validating their account through their<br>login information.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/459c7cdef61f70aecaa170876fc46ac0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message showing successful logout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/ffd10d5025920a0e402ed88c728cbeaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot access profile information without being logged in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/ffd10d5025920a0e402ed88c728cbeaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL shows it being from heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/12">https://github.com/its-dmoore/IT202_008/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>For the login, we validate login info based on the registration information stored<br>in our database.<div><br></div><div>We use html for the front and php for the backend<br>to handle the logic and call various methods.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/ffd10d5025920a0e402ed88c728cbeaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message shows user not being logged in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/ffd10d5025920a0e402ed88c728cbeaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL is from heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/36b548d02eb467779bc6b8ab78ec9176.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message showing the user not having the proper permission<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/36b548d02eb467779bc6b8ab78ec9176.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL being from heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/bf15824fe5cf10191b9f5c849ebc48bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>One valid record from lesson<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/3e8fb7a391354d3a5f47c7193b7b2f4a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin user identified by ID<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/918e9509056137d4d262b20e9c5f6cf7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table information<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/26">https://github.com/its-dmoore/IT202_008/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>In the session, users are assigned roles in the assign_roles, create_roles, and list_roles.php<br>files.<div><br></div><div>For the login-protected pages, we check if the user has logged in successfully<br>under the login.php page.<br><div><br></div><div>We also are using the javascript helper file along with<br>nav.php to organize roles into the database for more efficient storage.</div></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>In the session, users are assigned roles in the assign_roles, create_roles, and list_roles.php<br>files.<div><br></div><div>For the role-protected pages, we check if the user has logged in successfully<br>under the login.php page and also check their assigned roles.</div><div><br></div><div>We mainly do this<br>by parsing through the sql database to view the assigned roles that each<br>registered data point has.<br><div><br></div><div>We also are using the javascript helper file along with<br>nav.php to organize roles into the database for more efficient storage as well.</div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/ce6dbfa0b45558a5e8b607787d5572ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Navigation tab is styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/067e33fcf55b3fc1e7939e302e2ae2b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile form is styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/067e33fcf55b3fc1e7939e302e2ae2b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UI is clean and simplistic with black and white css coloring<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/36d7e79cb4712b8505c280eb831fc611.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Data output is in a clean manner<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/209dcf25b55b499fc1692a5560111bcc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL is from heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/25">https://github.com/its-dmoore/IT202_008/pull/25</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>For the css styling, I chose to switch up my alert warning a<br>bit from the yellow and made it more orange-yellow so that way the<br>message can be easier to read.<div><br></div><div>Additionally, I just made all forms, nav, and<br>body elements be black and white for a simple clean look.</div><div><br></div><div><div style="color: rgb(212,<br>212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px;<br>white-space: pre;"><div><span style="color: #d7ba7d;">.alert-success</span> {</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">background-color</span>: <span style="color: #ce9178;">green</span></div><div>}</div><br><div><span style="color:<br>#d7ba7d;">.alert-warning</span> {</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">background-color</span>: <span style="color: #dcdcaa;">rgb</span>(<span style="color: #b5cea8;">255</span>, <span style="color:<br>#b5cea8;">196</span>, <span style="color: #b5cea8;">0</span>);</div><div>}</div><br><div><span style="color: #d7ba7d;">.alert-danger</span> {</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">background-color</span>: <span style="color:<br>#ce9178;">red</span>;</div><div>}</div><br><div><span style="color: #d7ba7d;">.alert-info</span> {</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">background-color</span>: <span style="color: #ce9178;">teal</span>;</div><div>}</div><div><span style="color: #d7ba7d;">nav</span><br><span style="color: #d7ba7d;">li</span>{<span style="color: #9cdcfe;">display</span>: <span style="color: #ce9178;">inline</span>; <span style="color: #9cdcfe;">background-color</span>: <span style="color:<br>#ce9178;">black</span>;}</div><div><span style="color: #d7ba7d;">nav</span> <span style="color: #d7ba7d;">li</span> <span style="color: #d7ba7d;">a</span>{<span style="color: #9cdcfe;">color</span>: <span style="color:<br>#ce9178;">white</span>}</div><div><span style="color: #d7ba7d;">input</span>{border-block: <span style="color: #b5cea8;">50%</span>;}</div><div><span style="color: #d7ba7d;">body</span>{</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">background-color</span>: &lt;span<br>style=&quot;color: #ce9178;&quot;&gt;black</span>;</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">color</span>: <span style="color: #ce9178;">white</span>;</div><br><div>}</div></div></div><div><br></div><div><br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/6fdd034b7f8d6894cc9714a442750f51.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User friendly error in the form of validation message for a login protected<br>page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/6fdd034b7f8d6894cc9714a442750f51.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login to access page error message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/4e51d7582e1d89caa2833ebb2905523c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid email error message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/f5d92a54c9d184b8e4c5111ee6ae2781.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid password length error message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/607fc3c91de4af71569161359007d5d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User-friendly error is from heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/14">https://github.com/its-dmoore/IT202_008/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>In order to turn techinal messages into being friendly for our users, we&#39;ve<br>created a flash message function using javascript helper functions to help create quick<br>messages that the reader can easily interpret .<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/3d94689d38491c6c7c46f428e942b246.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email and username prefilled on profile page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/3d94689d38491c6c7c46f428e942b246.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL is from heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/15">https://github.com/its-dmoore/IT202_008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>After having logged in and clicked on the profile,&nbsp; we retrieve the username<br>and email from the database and show that data.<div><br></div><div>We implement 3 methods in<br>the profile.php file to prevent the current password from being shown in addition<br>to allowing the user to update or create a new profile based on<br>our password requirements for the database.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/c53f55d2eceb8670c32ca6495aa3979e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username validation (switch from dmoore to dmoore11)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/e54be9ffa615bd38d4e1f6683ade384b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email validation (switch from <a href="mailto:&#x64;&#x74;&#109;&#111;&#111;&#x72;&#x65;&#x40;&#x67;&#x6d;&#97;&#105;&#108;&#x2e;&#99;&#x6f;&#109;">&#x64;&#x74;&#109;&#111;&#111;&#x72;&#x65;&#x40;&#x67;&#x6d;&#97;&#105;&#108;&#x2e;&#99;&#x6f;&#109;</a> to <a href="mailto:&#x64;&#116;&#x6d;&#x6f;&#111;&#x72;&#x65;&#x31;&#x31;&#64;&#103;&#109;&#x61;&#105;&#x6c;&#x2e;&#x63;&#x6f;&#109;">&#x64;&#116;&#x6d;&#x6f;&#111;&#x72;&#x65;&#x31;&#x31;&#64;&#103;&#109;&#x61;&#105;&#x6c;&#x2e;&#x63;&#x6f;&#109;</a>)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/b3a9e432467e1287ae429210d9c1ad23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/129180d7bf81ea8b038411020dc11b49.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/15eec536293c604f36536fd84634b982.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email already in use message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/45ec12b96321547b2c7c60271e5aa483.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Chosen username is not available message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/45ec12b96321547b2c7c60271e5aa483.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>URL is from Heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/e5d1eaae4aa166de7fc77c0213f63db8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before profile change<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/abf08ff56f40cd41db9e902441972ad3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After profile change<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/6d52e810ad392e9782ab6f2a9bd489c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Highlighted changes of updated table from the original table (before changes)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/15">https://github.com/its-dmoore/IT202_008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>First the data is selected from the table, then we check and update<br>the data using a variety of functions laid out in the profile.php file.<div><br></div><div>Most<br>functions cater to validation which verifies that the data is indeed matching existing<br>data from the table.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/b792d0573739a29cb0fac98cbf9cef07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>At least 1 issue per milestone feature (one outlined at top and last<br>one slightly visible at bottom)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/b792d0573739a29cb0fac98cbf9cef07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board perspective<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/its-dmoore/projects/3">https://github.com/users/its-dmoore/projects/3</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-prod.herokuapp.com/Profile/login.php">https://dtm36-prod.herokuapp.com/Profile/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/dtm36" target="_blank">Grading</a></td></tr></table>