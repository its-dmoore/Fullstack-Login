<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Darian Moore (dtm36)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2023 8:54:15 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-bank-project/grade/dtm36" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/4afc291f12b98f2b0bfeeea5dc0b40a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>System user account table in sql<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/fd7d224b5cf6f96437362df3238922f3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>World account user account table in sql<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>Both the system user and world accounts are needed for better account integration.&nbsp;<br>The system user is meant to act as an admin account to oversee<br>all profiles and transactions. Meanwhile, the world account serves as the initial source<br>for stored account information such as account number, user id, email, etc.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/46">https://github.com/its-dmoore/IT202_008/pull/46</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/7d778a16b9ff30d7caa83379caf6bf72.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Dashboard with heroku dev url<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>None of the links are working. I got them to show up but<br>I can&#39;t get the actual link/page to load for them.<div><br></div><div>All links beside the<br>profile are essentially dummy/filler links as the ones for this Milestone did not<br>work for me.</div><div><br></div><div>The way I planned to set it up in the future<br>was to have &quot;create account&quot; be a place where the user can enter<br>information to make various account types such as checking, savings, investing, etc.</div><div><br></div><div>For the<br>&quot;my accounts&quot; page I wanted it to be a link where the user<br>can check their profile and easily be able to see/access all of the<br>various accounts that they have created.</div><div><br></div><div>For deposit I wanted it to be a<br>link where the user can deposit a minimum of $5 or more (depending<br>on how much they want to put in) to any of their accounts.</div><div><br></div><div>For<br>withdraw I wanted it to be a link where the user can withdraw<br>any amount from any of their accounts so long as it won&#39;t make<br>their account negative.</div><div><br></div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/46">https://github.com/its-dmoore/IT202_008/pull/46</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/377683426a343767fa06e77f8f8c7058.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Creating checking account with heroku dev url<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/ba499a6ef2c368f06b96ab39f85196c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Minimum funding validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/377683426a343767fa06e77f8f8c7058.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message from task 1 data not working<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/377683426a343767fa06e77f8f8c7058.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot with heroku dev url<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/30b02a2449ac5a82576a688bfd9d5c78.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction being generated from initial deposit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>I chose option 2.<div><br></div><div>For creating an account including the association of the user<br>and their transactions being generated I inserted a null record initially. From there<br>I generated a new account id. Then from there I used that information<br>to create a new account number which was then swapped out for the<br>initial null value.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/46">https://github.com/its-dmoore/IT202_008/pull/46</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-prod.herokuapp.com/Project/create_account.php">https://dtm36-prod.herokuapp.com/Project/create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/1dc08b53e4e9fda5b9c6b94103eb500a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Should be at least 5 &amp; code for account number, account type, modified,<br>and balance<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/61eb962b39855d2b24d2377876b5c618.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot with heroku dev url<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>Called mysql database by connection/using mysqli function. I then checked to see if<br>the connection works or not. If it doesn&#39;t a message is produced. However,<br>if it does then whatever information that is stored in the table is<br>then echoed onto the screen.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/46">https://github.com/its-dmoore/IT202_008/pull/46</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-prod.herokuapp.com/Project/list_accounts.php">https://dtm36-prod.herokuapp.com/Project/list_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/1cda0fc105e750cc7c27f7d288dc0d71.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account showing account number, account type, balance, opened/created date of the selected account<br>(from Accounts table)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/d890c0741bad03b9056ca92be97789f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transactions code showing the src/dest account numbers (not account id), the transaction type,<br>the change in balance, when it occurred, expected total, and the memo<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>I used the mysqli query from the my sql library to connect to<br>the database. Also I used mysqli_fetch_assoc to show my results based on the<br>account. As for everything else, I setup the parameters to display all information<br>tied to the transaction history.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/49">https://github.com/its-dmoore/IT202_008/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-prod.herokuapp.com/Project/lists_accounts.php">https://dtm36-prod.herokuapp.com/Project/lists_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/e03f48b01baf9a23074c018306de1dfa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Deposit page not working but is from heroku dev<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/3d920f481cf99d0440ecb33d94137a1c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Deposit code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/188f2e4e434e20f4dc737f5d202cecb5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Withdraw page not working but is in heroku dev (code for account withdraw)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/9946f6534e50857ced34229a2cca502d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Withdraw code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/188f2e4e434e20f4dc737f5d202cecb5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Heroku dev url<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/47a79c09a2e8b4d6f01bef7ad5685992.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error for negative numbers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/188f2e4e434e20f4dc737f5d202cecb5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Heroku dev url<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/0cfe46dc4c99a6641053a74d85aad8bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error code for withdrawing more than what the account contains<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/a4e1ea89f2ce23e3751adbffd6dbb22b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Deposit success code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/acf88e1303363a0d4a7132ee726e7e52.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Withdraw success code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/d6fd3c28017e46ac3dda666a5fa2a47c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Expected total code for deposit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/cf6eb71d734b13a3cfadda3344bcaec2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Expected total code for withdraw<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>For transactions whatever the user does as far as depositing or withdrawing money<br>is recorded in the database. That data is then accessesed everytime the user<br>connects to there account via a new session. Based on their previous actions<br>done in the transaction history the account picks back up where it left<br>off in the new session. For account lookup the information is pulled from<br>the database which stores the accout information. For expected total calculation the system<br>checks which account it is. based on the balance information most previously store3d<br>on the database. Additionalliy it utilizes the world account to associate the original<br>funds to the users expected balance. For the two transaction records the information<br>is stored in the transaction_history table within my database I stored my admin<br><a href="mailto:&#100;&#x6d;&#111;&#x6f;&#114;&#x65;&#x31;&#x31;&#x40;&#x67;&#x6d;&#x61;&#x69;&#x6c;&#x2e;&#x63;&#111;&#109;">&#100;&#x6d;&#111;&#x6f;&#114;&#x65;&#x31;&#x31;&#x40;&#x67;&#x6d;&#x61;&#x69;&#x6c;&#x2e;&#x63;&#111;&#109;</a> and another user <a href="mailto:&#104;&#97;&#114;&#97;&#109;&#98;&#x65;&#64;&#x69;&#99;&#108;&#x6f;&#117;&#x64;&#x2e;&#x63;&#111;&#x6d;">&#104;&#97;&#114;&#97;&#109;&#98;&#x65;&#64;&#x69;&#99;&#108;&#x6f;&#117;&#x64;&#x2e;&#x63;&#111;&#x6d;</a><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/49">https://github.com/its-dmoore/IT202_008/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-prod.herokuapp.com/Project/dashboard.php">https://dtm36-prod.herokuapp.com/Project/dashboard.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) </td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i2.paste.pics/06de2f1321e27e7c7871a5f432e60658.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board part 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i2.paste.pics/579a06fe0da86571824ce2eb795ed70b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board part 2 (could not finish user portion of milestone 2 before<br>deadline)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-bank-project/grade/dtm36" target="_blank">Grading</a></td></tr></table>