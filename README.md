# Plantme Greenback Website 


## Problem
- Global emission is very high so the air is poluted 
- People seems to be lack of knowledge about resolving the polution issues 

## Solution 
- Children can go around the city (currently target Auckland) to explore different types of plans and trees and they can get rewards for doing it 

## Features 
- Login and register 
- Load the map with the dots showing the trees 
- Detech the user location show the user location in the map 
- Find the direction between a user and a tree and change the direction moving if needed 
- Take the picture of the tree from the camera 

## Technical Solution 
- Techstack: 
    - Database: MySQL 
    - Backend: PHP, Laravel 
    - Frontend: ArGis Map, Vue JS 
- General function: 
    - Database
        - Insert query building 
        - Update query building 
        - Select query building 
        - Execute the query to do insert or update with the database 
        - Execute the select query to get data from the database 
        - Get the data from database table based on some simple conditions 
- Specific funtions 
    - Authentication
        - Login
            - Input username and password 
            - Get the data of the person with same username and password from database table 
            - If the person is found, redirect to the page for exploring the trees. 
        - Register 
            - Collect the user information 
            - Create the query for insert to the user table to put all the information to the user 
            - Execute the insert query 
   - Tree explore
        - Load the map to the screen 
        - Load the trees coordinate and put them to the map from the database 
        - When the user tap a tree, the tree information is displayed 
        - When the user hit direction from the tree popup, the app will find the direction from the person to the tree and draw the line showing how the person can get to the tree 
        - As the user moves toward the tree, the dot for user location moves and the app will calculate the distance between the person and tree 
        - As the person gets to the tree, the app will display a popup showing destination reached 
        - Some legal information is displayed 
        - The user can then take a picture of the tree as the proof to get reward 
