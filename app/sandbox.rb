#!/usr/bin/env ruby

require './clases/gato'

gato = Gato.new()
gato.nombre
gato.apodos = 'lester'
gato.edad = 15
gato.color = 'blanco'
gato.raza = 'tabby'
gato.descripcion = 'tabby'
gato.macho = false
gato.historia_medica = 'vacunado, esterilizado'

puts gato.inspect
puts gato.texto_edad
puts gato.texto_sexo
