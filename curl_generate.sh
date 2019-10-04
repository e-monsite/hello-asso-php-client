# Pre-clean
rm -Rf generated
rm generated.zip

curl -X POST \
  https://generator3.swagger.io/api/generate \
  -H 'Content-Type: application/json' \
  -H 'cache-control: no-cache' \
  -d '{
    "options": {
        "packageName": "HelloAssoPhpClient",
        "apiPackage": "HelloAsso",
        "variableNamingConvention": "snake_case",
        "invokerPackage": "HelloAsso\\Api",
        "composerVendorName": "e-monsite",
        "composerProjectName": "hello-asso-php-client",
		"gitUserId": "e-monsite",
		"gitRepoId": "hello-asso-php-client"
    },
    "lang": "php",
    "type": "CLIENT",
    "codegenVersion": "V3",
    "specURL": "https://raw.githubusercontent.com/e-monsite/hello-asso-php-client/master/hello_asso_oas3.json"
}' > generated.zip

unzip generated.zip -d generated/

# Remove old files
rm composer.json
rm phpunit.xml.dist
rm README.md
rm -Rf docs
rm -Rf lib
rm -Rf test

# Move file in root directory
cp -Rf generated/SwaggerClient-php/* .

# Post-clean
rm -Rf generated
rm generated.zip

# No use of git_push script, clean it
rm git_push.sh

# Replace readme file main title
sed -i 's/\# SwaggerClient-php/\# Hello Asso PHP Client/g' README.md

# Replace readme file authorization text
sed -i 's/\#\# Documentation For Authorization/\#\# Documentation For Authorization\n\nOAuth 2 JWT token with custom grant type/g' README.md