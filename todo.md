# Basic project setup

## Auth
- [ ] Create user controller
- [ ] Set up auth provider
- [ ] Registration
- [ ] Login
- [ ] Permissions per page


## Models
- Users
 - [x] Name
 - [x] Email
 - [x] Password
 - [x] Role (Admin, Applicant, Judge, Observer)

- Questions
 - [ ] Question
 - [ ] Type (Input, Text, Dropdown, Boolean)
 - [ ] Options (JSON, Optional, used for dropdowns, and for weighted booleans)
 - [ ] Status (This question will only appear when an application is within a specific status)
 - [ ] Role (User role this question should be shown to: Applicant or Judge)
 - [ ] Required
 - [ ] Parent
 - [ ] Order

- Applications
 - [ ] Name
 - [ ] Description
 - [ ] Status (New, Submitted, Review, Follow Up, Accepted, Rejected)
 - [ ] Applicant Score
 - [ ] Judge Score
 - [ ] User ID

- Answers
 - [ ] Application ID
 - [ ] Question ID
 - [ ] Answer

- Documents
 - [ ] Name
 - [ ] Description
 - [ ] File
 - [ ] Application ID
 - [ ] Admin ID (Useful for tracking if admins have attached a file to an application)

- Feedback
 - [ ] Feedback (So judges can ask questions or give criticism)
 - [ ] Type (Input, Text, Dropdown, Boolean)
 - [ ] Options (JSON, Optional, only for dropdowns at the moment)
 - [ ] Response (Response from the user)
 - [ ] Application ID
 - [ ] Admin ID (Which admin sent the feedback)
 - [ ] Regarding ID (The ID of the data this feedback is related to, if any)
 - [ ] Regarding Type (Can be a question or a document)

- Scores
 - [ ] Score
 - [ ] Application ID
 - [ ] Admin ID
 - [ ] Question ID


## Pages
- [ ] Home page
- [ ] User dashboard
- [ ] Admin dashboard
- [ ] Judge dashboard
- [ ] Create question
- [ ] Create application
- [ ] Answering questions
- [ ] Judging applications
- [ ] Follow up questions


## Relationships
- [ ] One to many + One to one between users <-> applications
- [ ] One to one + One to many between answers <-> applications
- [ ] One to one between answers -> questions
- [ ] One to many + One to one between questions <-> question children
- [ ] One to many + One to one between applications <-> documents
- [ ] One to one between documents -> admins (users) 
- [ ] One to one + One to many between feedback <-> applications
- [ ] One to one between feedback -> admins (users)
- [ ] One to one polymorphic between feedback -> answers and documents
- [ ] One to one + One to many between scores <-> applications
- [ ] One to one between scores -> admins (users)
- [ ] One to one btween scores -> questions


## Defined Events
- [ ] User Registered
- [ ] Application Submitted
- [ ] Application Needs Review
- [ ] Application Accepted
- [ ] Application Rejected


## Event Handlers
- [ ] Send user email when user is registered
- [ ] Send judges email when application is submitted
- [ ] Send user email when application needs review
- [ ] Send user email when application is accepted
- [ ] Send user email when application is rejected