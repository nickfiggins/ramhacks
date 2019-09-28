from django.shortcuts import render
from django.template import loader
from django.http import HttpResponseRedirect, HttpResponse


# Create your views here.

def index(request):
    template = loader.get_template('carfinder/index.html')
    context = {

    }
    return HttpResponse(template.render(context, request))
