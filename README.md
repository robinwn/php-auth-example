# php-auth-example

An example of using php with BCGov Keycloak

vscode devcontainer based on:
https://github.com/microsoft/vscode-remote-try-php

Set the following in config.php; these values come from the `Installation JSONs`<sup>1</sup> appropriate to the environment you are deploying.

| config.php        | Installation JSON      |
| ----------------- |----------------------- |
| baseUrl           | "auth-server-url"      |
| realm             | "realm"                |
| applicationId     | "resource"             |
| applicationSecret | "credentials"."secret" |


To run as a vscode devcontainer,

- open a new Terminal

- run:
```
> composer update
> php -S 0.0.0.0:8000
```

<sup>1</sup> see your sso-requests integrations
