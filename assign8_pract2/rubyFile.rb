require 'sinatra'

def fun(firstName, lastName)
    "#{lastName}  #{firstName}" 
end;

get '/' do
    erb:index
end

post '/reverse' do
    firstName = params[:firstName]
    lastName = params[:lastName]
    @result = fun(firstName, lastName)
    erb:reverse
end 