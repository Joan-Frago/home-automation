import sys
import os

configPath=os.path.abspath("../../config")
sys.path.append(configPath)

from config import mySqlHost
from config import mySqlUser
from config import mySqlPassword
from config import mySqlDatabase

import mysql.connector

try:
    Db = mysql.connector.connect(
        host=mySqlHost,
        user=mySqlUser,
        password=mySqlPassword,
        database=mySqlDatabase,
        connection_timeout=10
    )
except Exception as e:
    print("Error when trying to connect to the data base: {}".format(e))

print(mySqlHost)
print(mySqlUser)
print(mySqlPassword)
print(mySqlDatabase)

