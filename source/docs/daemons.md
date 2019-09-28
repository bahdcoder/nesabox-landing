---
title: Daemons
description: Manage daemons with supervisor from a nice dashboard with Nesabox.
extends: _layouts.documentation
section: docs
---

# Daemons

Supervisor is a tool that allows you to monitor processes on UNIX based system. You can use daemons to start long running processes such as queue workers, Nesabox enables you easily manage supervisor processes . To manage daemons, visit the `Processes` tab on a server.

## Creating daemons

To add a daemon, you need to provide the `command` to run, the number of `processes`, the linux `user` to run the process, and an optional `directory`. 

![Add daemon](https://res.cloudinary.com/bahdcoder/image/upload/v1569666249/Screenshot_2019-09-28_at_11.23.46_jqx6ik.png)

Once a daemon is installed, you can check its status, uptime, or delete it.
