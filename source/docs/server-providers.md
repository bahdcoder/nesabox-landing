---
title: Server providers
description: Nesabox can connect your account to our supported cloud providers to ease the process of provisioning servers..
extends: _layouts.documentation
section: docs
---

# Server providers {#server-providers}
Nesabox can connect your account to our supported cloud providers to ease the process of provisioning servers. Once you connect a provider, Nesabox would be able to perform actions on your account such as provisioning servers, adding SSH keys and deployment scripts.

## Digital Ocean{#digital-ocean}

To connect your digital ocean account, log in to the DigitalOcean Control Panel. Click the `API` link in the main navigation, which takes you to to the `Applications & API` page on the `Tokens/Keys` tab. In the Personal access tokens section, click the `Generate New Token` button.

<div class='info'>
    Be sure to provide READ and WRITE access to this access token.
</div>

![Digital Ocean Personal Access token form](https://res.cloudinary.com/bahdcoder/image/upload/v1568476896/Screenshot_2019-09-14_at_17.00.56_bh3zl9.png)

## Vultr{#vultr}

To connect your Vultr account, login to your Vultr account. Click the `Account` link in the main navigation and switch to the `API` tab. Make sure the API is enabled, and copy your `API Key`.

![Vultr API Key](https://res.cloudinary.com/bahdcoder/image/upload/v1569654219/Screenshot_2019-09-28_at_08.00.41_ha7udq.png)

## Linode{#linode}

To connect your Linode account, login to your Linode cloud manager, Click your avatar in the top navigation and select `My Profile`. Visit the `Api Tokens` tab and add a new personal access token. 

<div class='info'>
    Be sure to provide READ and WRITE access to Linodes and Stackscripts.
</div>

![Linode access token](https://res.cloudinary.com/bahdcoder/image/upload/v1569654739/Screenshot_2019-09-28_at_08.11.43_adyx7l.png)
