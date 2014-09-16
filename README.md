Miaudopciones
===

Plataforma web para poner en contacto adoptantes con organizaciones que dan gatos en adopción. Permite agregar perfiles, fotos, eventos y tener fomrularios de adopción actualizados.
Tiene integración con FB para publicar Eventos, Fotos, Likes en los perfiles, entonces es necesario tener una cuenta de FB para aprovechar todas las funcionalidades. 

- Ruby >= 2.0
- MongoDB
- JQuery y Bootstrap
- Usa Facebook para almacenamiento de fotos e info de eventos. De esta forma la info no se duplica y se necesitan menores recursos de memoria y almacenamiento para que funcione la app

### Deploy en Ubuntu

```apt-get install ruby2.0 ruby-dev bundler```

```bundle install```

```cd app```

```ruby app.rb```
