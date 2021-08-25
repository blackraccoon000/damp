#!/usr/bin/env bash
mysql -u test_user -ppwd pollapp < "/docker-entrypoint-initdb.d/setup.sql"