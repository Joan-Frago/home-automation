from dataBase import mySqlHost
from dataBase import mySqlUser
from dataBase import mySqlPassword

import mysql.connector

Db = mysql.connector.connect(
    host=mySqlHost,
    user=mySqlUser,
    password=mySqlPassword
)

