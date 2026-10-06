# SaigonBus Database Management System

![SaigonBus Logo](SaiGonBus.png)

A PHP/MySQL coursework project for browsing, searching, and updating bus-network records through a simple web dashboard.

## Features

- display bus-system tables;
- search records by selected entity type;
- update bus status and maintenance dates;
- responsive HTML/CSS screens for the main workflows.

## Local setup

1. Create a MySQL database named `bus_system` and import your own schema/data.
2. Copy `config.example.php` to `config.php`.
3. Set `SAIGONBUS_DB_HOST`, `SAIGONBUS_DB_USER`, `SAIGONBUS_DB_PASSWORD`, and `SAIGONBUS_DB_NAME`, or edit the local ignored `config.php`.
4. Serve the folder through PHP and open `index.php`.

The repository intentionally contains no database dump and no credentials. If an older public copy of this coursework used a real local password, rotate that password before reusing the database account.

## Scope

This is a learning project, not a production transit-management system. Before deployment, add authentication, authorization, prepared statements throughout, CSRF protection, server-side validation, and a proper schema migration process.
