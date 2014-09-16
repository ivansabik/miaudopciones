#!/usr/bin/env ruby
# datos_prueba.rb
require './clases/gato'
require './clases/info_nosotros'

info_nosotros = InfoNosotros.new(:nombre => 'Katzimiau',
    :lat => 19.3963,
    :lon => -99.1886,
    :usuario => 'verwalter',
    :hashim => '',
    :email => 'contaco@katzimiau.org',
    :fb => 'katzimiau',
    :movil => '0445555555555',
    :fijo => '5555555555',
    :estilo => 'css/bootstrap-cerulean.css')
info_nosotros.save

gato = Gato.new(:nombre => 'Osama',
	:apodos => '',
	:edad => 7,
	:color => 'blanco con cafe',
	:macho => true,
	:historia_medica => 'vacunado, esterilizado')
gato.save

gato = Gato.new(:nombre => 'Maui',
	:edad => 8,
	:color => 'amarillo',
	:macho => true,
	:historia_medica => 'esterilizado')
gato.save

gato = Gato.new(:nombre => 'Macondo',
	:edad => 18,
	:color => 'blanco con gris',
	:macho => true,
	:historia_medica => 'esterilizado, no tiene un ojo')
gato.save

gato = Gato.new(:nombre => 'Lola',
	:edad => 28,
	:color => 'blanca',
	:macho => false,
	:historia_medica => 'vacunada')
gato.save

gato = Gato.new(:nombre => 'Brayan',
	:edad => 24,
	:apodos => 'malkie, malik',
	:color => 'atrigrado',
	:macho => true,
	:historia_medica => 'esterilizado')
gato.save

gato = Gato.new(:nombre => 'Celia',
	:edad => 24,
	:apodos => 'celina',
	:color => 'atrigrado',
	:macho => false,
	:historia_medica => 'esterilizada, vacunada')
gato.save

gato = Gato.new(:nombre => 'Valentina',
	:edad => 33,
	:apodos => 'napolitana',
	:color => 'blanco, gris, crema',
	:macho => false,
	:historia_medica => 'esterilizada, vacunada')
gato.save

gato = Gato.new(:nombre => 'Donatella',
	:edad => 42,
	:color => 'crema',
	:macho => false,
	:historia_medica => 'esterilizada, vacunada')
gato.save

puts 'Listos los datos pueba'
