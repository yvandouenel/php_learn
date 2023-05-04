`composer init`
Entrer "namespace Diginamic\Test" comme nom de package
---

Dans le répertoire src, utiliser le code suivant pour déclarer que la classe fait partie du namespace :
`namespace Diginamic\Test;`
---
Dans le fichier index.php,  utiliser le code suivant pour pouvoir utiliser l'autoload ainsi que la class User qui fait partie du namespace Diginamic\Test : 
---
`require 'vendor/autoload.php';
use Diginamic\Test\User;`