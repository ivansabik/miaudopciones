#!/usr/bin/env ruby
# app.rb
require 'sinatra'
require 'sinatra/content_for'
require 'mongo_mapper'
require './models/gato'
require './models/info_nosotros'

get '/' do
    redirect to('/gatos')
end

get '/gatos' do
    gatos = Gato.all
    @gatos = gatos
    @nosotros = InfoNosotros.first
    erb :gatos
end

get '/gatos/agregar' do
    @nosotros = InfoNosotros.first
    erb :gato_agregar
end

post '/gatos/agregar' do
    @nosotros = InfoNosotros.first
    if params[:sexo] == '1'
        macho = true
    else
        mache = false
    end
    gato = Gato.new(:nombre => params[:nombre],
        :apodos => params[:alias],
        :edad => params[:edad],
        :color => params[:color],
        :raza => params[:raza],
        :descripcion => params[:descripcion],
        :macho => macho,
        :historia_medica => params[:historia_medica],
        :thumbnail => params[:thumbnail])
    gato.save
    @resultado = 'Gato agregado'
    erb :resultado_operacion
end

get '/gatos/:id_gato' do
    id_gato = params[:id_gato]
    @gato = Gato.find(id_gato)
    @nosotros = InfoNosotros.first
    erb :gato_info
end

get '/nosotros' do
    @nosotros = InfoNosotros.first
    erb :nosotros_info
end

get '/login' do
    @nosotros = InfoNosotros.first
    erb :login
end

get '/gatos/eliminar/:id_gato' do
  "Eliminar gato #{params[:id_gato]}"
end

get '/gatos/editar/:id_gato' do
  'Editar gato'
end

get '/adopciones/agregar' do
  'Agregar adpocion'
end

get '/adopciones/eliminar/:id_gato' do
  "Eliminar adopcion #{params[:id_gato]}"
end

get '/formulario/editar' do
  'Editar formulario'
end

get '/gatos/agregar-solicitud/:id_gato' do
  "Agregar solicitud #{params[:id_gato]}"
end

get '/nosotros/editar' do
  'Editar info nosotros'
end

get '/adopciones' do
  'Ver lista de adoptantes'
end

get '/adopciones/:id_adopcion' do
  "Ver adopcion #{params[:id_adopcion]}"
end
