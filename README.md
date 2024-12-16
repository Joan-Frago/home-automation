# Sant Jaume Project
All the development made will be done in this repository.

EVERYTHING IS EXECUTED IN A UNIPI (raspberry pi), BE CAREFUL WITH WHAT YOU EXECUTE

## Idea
The idea is to have the unipi turn pins on or off depending on what the user wants to do in the GUI.

Every time it turns any pin on or off, or reads a pin to see its state, it has to save that in a database.

In the GUI (web) you have to be able to see those logs from the unipi.

It would be better to have an API that manages all of these queries and inserts to the database.

Python files will call the API to insert values and javascript will call the API to query values.

## Git branches
1. There is a **main** branch, where the stable version of the platform is
2. There is a **stjaume-dev** branch, where the developing of new versions is done
3. There is a **test** branch, where all the testing is done