#!/bin/python3

"""
init-database.py

This script instantiates the SQLite3 database for F20EC CW2

Author:   Ben Milne
Created:  Mar. 2021
"""

import sqlite3
conn = sqlite3.connect('f20ec-store.db')
cur = conn.cursor()

"""
Parse and execute SQL database schema
"""
schema_file = open('f20ec-schema.sql')
schema_sql  = schema_file.read()
cur.executescript(schema_sql)

