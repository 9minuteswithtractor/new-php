# about :
    new php proj template with debug
## debugger
    Check if php installed 

`php -v`

    if not 
`brew install php`

    test php server
`php -S localhost:8000`

    then install Xdebug
`pecl install xdebug`

    then install vscode Extension
`"php debug" by xdebug and Php by DevSense`

    then 
**create**
`launch.json` 
**file in the .vscode folder [ create folder if needed ]**

    then add this to .json
```js
{
    "version": "0.2.0",
    "configurations": [
       
      
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": { "${workspaceRoot}": "${workspaceRoot}" }
        },
        {
            "name": "Launch php server",
            "type": "php",
            "request": "launch",
            "runtimeArgs": [
              "-S",
              "localhost:8000",
              "-t",
              "backend/public", // or wherever Your app entrypoint is (index.php)
              "-d",
              "xdebug.mode=debug",
              "-d",
              "xdebug.client_host=127.0.0.1",
              "-d",
              "xdebug.client_port=9003"
            ],
            "pathMappings": { "/": "${workspaceRoot}/backend/public" } // or wherever Your app entrypoint is (index.php)
          }   
    ],
    "compounds": [
        {
            "name": "Launch Server & Debug 🚀",
            "configurations": ["Launch php server", "Listen for Xdebug"]
        }
    ]
}
```
## contributors:
***@mikelsons, @9minuteswithtractor***