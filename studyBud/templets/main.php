<!DOCTYPE html>
<!-- {% load static %} -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="{% static 'styles/style.css' %}" /> -->
    <link rel="stylesheet" href="./../static/css/style.css">
    <title>StudyBuddy - Find study partners around the world!</title>
</head>

<body>

    {% include 'navbar.html' %}

    {% if messages %}
    <ul class="messages">
        {% for message in messages %}
        <li>{{ message }}</li>
        
        {% endfor %}
    </ul>
    {% endif %}

    {% block content %}


    {% endblock %}

    <script src="{% static 'js/script.js' %}"></script>
</body>

</html>