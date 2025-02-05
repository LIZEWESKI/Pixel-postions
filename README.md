// Simple Algorithm Day 29
We need to create a Tag Model/Migration and Factory
Migration table we need to assert some columns
for now its just the name of the tag
than we need to create a pivot table for tags and jobs (keep in mind that the pivot table needs to be in ASC alpha order a,b,c etc and saparated by an underscore _ and also singular jobs => job)
Then make a connection between the two Models (Job, Tag), The Eloquent Relationship will be HasMany/belongsToMany for both Models
To attach tags to Job you have to call this hasAttached method that I didn't know about :)
// Simple Algorithm Day 30

Create a view,Route for Register/Login
Validate the user input
For register attach the user to an employer and create a path for the logo (use Public storage disc)
Log in, regenerate the session, redirect 