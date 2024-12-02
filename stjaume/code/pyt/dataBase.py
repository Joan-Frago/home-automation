import mysql.connector

Db = mysql.connector.connect(
    host="100.116.80.15",
    user="joan",
    password="2126"
)

print(Db)