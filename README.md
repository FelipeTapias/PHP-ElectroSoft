# Configurador de ElectroSoft PHP

Poyecto front para la vista de configuracion del autorizador.

## Notas del desarrollador

* Para ejecutar este proyecto se utiliza el comando `ng serve` en un entorno local de desarrollo, por defecto se habilitara la url `http://localhost:4200/`. con etso todos los cambios que se realizen dentro de los archivos del proyecto se veran reflejaos con la recarga automatica provista por angular-cli con webpack.

## Arquitectura

Para el desarrollo de este proyecto es importante tener en cuenta las siguientes politicas y metodologias.

* **Angular:** Framework front-end v10.2.1
* **Node:** En su version 14.15 es necesario para el funcionamiento de angular-cli.
* **Typescript:** Seguir las recomendaciones de **clean code** [aqui](https://github.com/labs42io/clean-code-typescript).
* **SASS:** Especial atencion a la **Metodologia BEM** [aqui](https://en.bem.info/methodology/quick-start/)
* **Componentes**: Para la construccion de los componentes es importante tener en cuenta lo referente a **Atomic design** [aqui](https://atomicdesign.bradfrost.com/).
* **ng-bootstrap:** Es el conjunto de componentes pre construidos elegidos y que cumple con las necesidades, mas informacion [aqui](https://ng-bootstrap.github.io/#/components/alert/examples).
* **Bootstrap:** Framework de estilos, debera ser personalizado con el uso de la caracteristica **Theming**, mas informacion [aqui](https://getbootstrap.com/docs/4.5/getting-started/theming/).

### Estructura del proyecto

La distribucion de las carpetas es en su mayoria definida por angular-cli pero es importante tener en cuenta la estructura dentro de la carpeta app para la creacion de los componentes.
```json
src/
  |
  |-app/
  |   |-components/ // Todos los componentes que se creen para una aplicacion deben estar dentro de esta carpeta
  |   |-shared/ // Todos aquellos componentes que sean de uso compartido del proyecto (Atomic Design)
  |   |   |- molecules/ // Aquellos componentes de tipo molecules descritos en Atomic design
  |   |   |- organisms/ // Aquellos componentes de tipo organisms descritos en Atomic design
  |-assets/
  |   |-sass/ // Todos lo archivos de configuracion del tema con el cual se debe implementar el skin de la aplicacion
  |   |   |-vendors/ // archivos  de intancia pra los frameworks de sass por defecto bootstrap esta configurado
  |   ...
  ...
```

### Convenciones de desarrollo con Angular

1. El IDE de trabajo elegido es VSCode [installar](https://code.visualstudio.com/)
2. Todo el codigo debera estar escrito en ingles.
3. Todos los componentes que sean creados bajo los principios de **Atomic design** deben estar dentro de la carpeta **shared** prinicpal del proyecto.
4. Tanto los modelos como los componentes debe estar dentro de la misma carpeta.
5. Los archivos de modelo deben estar sufijados con **.model** ejemplo: `myarchivodemodelo.model.ts`

### Extensiones VSCode

* Ayuda en el analisis de codigo estatico para BEM en SASS [instalar](https://marketplace.visualstudio.com/items?itemName=glen-84.sass-lint).

### CI/CD

## Generacion de codigo

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Distribucion

## Pruebas unitarias

## Referencias
