<table><tr><td> <em>Assignment: </em> IT202 JavaScript and CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Darian Moore (dtm36)</td></tr>
<tr><td> <em>Generated: </em> 2/20/2023 11:59:49 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-javascript-and-css-challenge/grade/dtm36" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul><li>Reminder: Make sure you start in dev and it's up to date<ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li><code>git checkout -b M3-Challenge-HW</code></li></ol></li></ul><ol><li>Create a copy of the template given here:&nbsp;<a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a></li><li>Implement the changes defined in the body of the code</li><li><strong>Do not</strong>&nbsp;edit anything where the comments tell you not to edit, you will lose points for not following directions</li><li>Make changes where the comments tell you (via TODO's or just above the lines that tell you not to edit below)<ol><li><strong>Hint</strong>: Just change things in the designated&nbsp;<code>&lt;style&gt;</code>&nbsp;and&nbsp;<code>&lt;script&gt;</code>&nbsp;tags</li><li><strong>Important</strong>: The function that drives one of the challenges is&nbsp;<code>updateCurrentPage(str)</code>&nbsp;which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li></ol></li><li>Create a branch called M3-Challenge-HW if you haven't yet</li><li>Add this template to that branch (git add/git commit)</li><li>Make a pull request for this branch once you push it</li><li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li><li>Create a new file&nbsp;<strong>m3_submission.md</strong>&nbsp;file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li><li>Add, commit, and push the submission file</li><li>Close the pull request by merging it to dev (double-check all looks good on dev)</li><li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li><li>Complete the merge to deploy to production</li><li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li></ol><style>` and `<script>` tags
    2. **Important**: The function that drives one of the challenges is `updateCurrentPage(str)` which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.  
5. Create a branch called M3-Challenge-HW if you haven't yet
6. Add this template to that branch (git add/git commit)
7. Make a pull request for this branch once you push it
8. You may manually deploy the HW branch to dev to get the evidence for the below prompts
9. Create a new file **m3_submission.md** file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)
10. Add, commit, and push the submission file
11. Close the pull request by merging it to dev (double-check all looks good on dev)
12. Manually create a new pull request from dev to prod (i.e., base: prod <- compare: dev)
13. Complete the merge to deploy to production
14. Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission
</style></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 5 Screenshots based on the checklist items for this task</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://i.paste.pics/41e8b240e8bf35127f371b5c4e0ad831.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Primary page (See screenshot url)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.paste.pics/29de29e8a55b19d52fdb0dc5959488e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Login page (See screenshot url)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.paste.pics/14596ea6e8a74f7ebd8de3ea648ffeda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Register page (See screenshot url)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.paste.pics/aa3fb7539a5bb1af795e7f667b4b5f70.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Profile page (See screenshot url)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://i.paste.pics/a03ea6b131785335c59e994aa25e089d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logout page (See screenshot url)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>Use css display property and called the value inline to make the display<br>horizontal. Doing this displays the text in a horizontal layout<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>Used list-style-type: none. Called css property that refers to the navigation list item<br>markers. Then I put an input a value of none so that way<br>the values are completely removed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>Used css background-color property. Called the property and input my own value of<br>color. Doing this sets my specified color as a background.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <p>Used css hover property.&nbsp; This sets the mouseover property that allows me to<br>hover over an item and have the color change. In this case I<br>set the color to black&nbsp; (0,0,0)<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>Used css before property. Then specify the type to be content. This input<br>set the character before the content to be what I specified which in<br>this case was the check mark.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <p>Used css property text-transform. Set the type to capitalize. This sets all the<br>first letters of the content to be capital.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I put padding and change the font size to large for my custom<br>styling. For this, I called the padding property and font size property.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>For this I set all items to be in an unorder list (ul).<br>This prevents the navigation list from getting the same changes as the styling.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>Attempted to use the query selector property in combination with updateCurrentPage<br></p><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>Attempted to use the query selector property in combination with updateCurrentPage<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>Difficulties trying to finish the last part with updating the current page for<br>both title and h1 tag. Still never figured it out. :/<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/its-dmoore/IT202_008/pull/6">https://github.com/its-dmoore/IT202_008/pull/6</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://dtm36-dev.herokuapp.com/Challenge.html#login">https://dtm36-dev.herokuapp.com/Challenge.html#login</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-javascript-and-css-challenge/grade/dtm36" target="_blank">Grading</a></td></tr></table>