#!/usr/bin/env ruby
# datos_prueba.rb
require './clases/gato'
require './clases/info_nosotros'

info_nosotros = InfoNosotros.new(:nombre => 'Kitlers',
    :lat => 19.3963,
    :lon => -99.1886,
    :descripcion => 'Somos una AC que rescata kitlers',
    :usuario => 'verwalter',
    :hashim => '',
    :email => 'info@kitlers.org',
    :fb => 'katzimiau',
    :movil => '0445555555555',
    :fijo => '5555555555',
    :estilo => 'css/bootstrap-cerulean.css')
info_nosotros.save

gato = Gato.new(:nombre => 'Osama',
	:edad => 7,
	:color => 'blanco con cafe',
	:macho => true,
    :thumbnail => 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-prn2/t1/q74/s720x720/1555523_10201916078198422_95561984_n.jpg',
	:historia_medica => 'vacunado, esterilizado')
gato.save

gato = Gato.new(:nombre => 'Maui',
	:edad => 8,
	:color => 'amarillo',
	:macho => true,
    :thumbnail => 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-frc1/t1/q82/s720x720/599705_10201674316874540_1491042760_n.jpg',
	:historia_medica => 'esterilizado')
gato.save

gato = Gato.new(:nombre => 'Macondo',
	:edad => 18,
	:color => 'blanco con gris',
	:macho => true,
    :thumbnail => 'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn2/t1/q77/s720x720/1511396_10201791204836666_1802049469_n.jpg',
	:historia_medica => 'esterilizado, no tiene un ojo')
gato.save

gato = Gato.new(:nombre => 'Lola',
	:edad => 28,
	:color => 'blanca',
	:macho => false,
    :thumbnail => 'http://a1.s6img.com/cdn/0012/p/3604735_11031896_lz.jpg',
	:historia_medica => 'vacunada')
gato.save

gato = Gato.new(:nombre => 'Brayan',
	:edad => 24,
	:apodos => 'malkie, malik',
	:color => 'atrigrado',
	:macho => true,
    :thumbnail => 'https://scontent-b-dfw.xx.fbcdn.net/hphotos-ash3/t1/73652_10150307356490137_3919922_n.jpg',
	:historia_medica => 'esterilizado')
gato.save

gato = Gato.new(:nombre => 'Celia',
	:edad => 24,
	:apodos => 'celina',
	:color => 'atrigrado',
	:macho => false,
    :thumbnail => 'http://iranian.com/main/files/blogimages/Persian%20Grumpy%20Cat.jpg',
	:historia_medica => 'esterilizada, vacunada')
gato.save

gato = Gato.new(:nombre => 'Valentina',
	:edad => 33,
	:apodos => 'napolitana',
	:color => 'blanco, gris, crema',
	:macho => false,
    :thumbnail => 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc3/t1/481502_10151394221425120_992162879_n.jpg',
	:historia_medica => 'esterilizada, vacunada')
gato.save

gato = Gato.new(:nombre => 'Donatella',
	:edad => 42,
	:color => 'crema',
	:macho => false,
    :thumbnail => 'http://i.huffpost.com/gen/1321615/thumbs/o-TROGSLY-570.jpg?6',
	:historia_medica => 'esterilizada, vacunada')
gato.save

puts 'Listos los datos pueba'
