from django.urls import path, include
from myapp import views
urlpatterns = [
 path('', views.index, name='index'),
 path('oled', views.oled),
]
