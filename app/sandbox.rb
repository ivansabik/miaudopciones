#!/usr/bin/env ruby

require './clases/gato'
require 'mongo_mapper'

# Normal
gato = Gato.new()
gato.nombre = 'Lester'
gato.apodos = 'lestat'
gato.edad = 15
gato.color = 'blanco'
gato.raza = 'tabby'
gato.descripcion = 'tabby'
gato.macho = false
gato.historia_medica = 'vacunado, esterilizado'

# Mogomappeado
MongoMapper.database = 'miaudopciones'
gato = Gato.new(:nombre => 'Lester',
	:apodos = 'lestat',
	:gato.edad = 15,
	:color = 'blanco',
	:raza = 'tabby',
	:descripcion = 'tabby',
	:macho = false,
	:historia_medica = 'vacunado, esterilizado')
gato.save!
gato = gato.where(:name => 'Lester').first
puts gato.inspect
