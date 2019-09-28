---
title: Cron jobs
description: Easily manage your cron jobs from a nice dashboard with Nesabox.
extends: _layouts.documentation
section: docs
---

# Cron jobs

Cron is a time-based job scheduler in Unix-like computer operating systems. If you have a script (could be Node.js, Python, Bash etc) that needs to run periodically, Cron is the easiest way to go. You can create and manage Cron jobs directly from your Nesabox dashboard.

## Creating jobs
The cron jobs can be managed from the `Processes` tab on the server. 

To add a cron job, you need to provide `command`, `frequency` and the linux `user` this job would be run with. The command provided can also be a script. 

![Add cron jobs](https://res.cloudinary.com/bahdcoder/image/upload/v1569663287/Screenshot_2019-09-28_at_10.34.31_fl6jjh.png)

After cron jobs are installed, you can view the output from any of your jobs. 

