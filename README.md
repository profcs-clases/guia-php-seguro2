```markdown
# 🛡️ Guía de Organización y Seguridad en Proyectos PHP

[![PHP Version](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-Academic%20Use-blue?style=for-the-badge)](LICENSE)
[![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)]()

Material de apoyo oficial para estudiantes de Ingeniería Informática. Esta guía está diseñada para facilitar la transición desde el conocimiento básico de Programación Orientada a Objetos (POO) y Frontend, hacia el desarrollo de aplicaciones web **profesionales, seguras y mantenibles** en PHP.

---

## 📌 ¿Qué aprenderás con esta guía?

A diferencia de tutoriales básicos que mezclan HTML y SQL en un solo archivo, este material se enfoca en las prácticas estándar de la industria de software:

- 🏗️ **Arquitectura:** Patrones Front Controller, MVC simplificado y Autoloading (PSR-4).
- 🗄️ **Base de Datos:** Uso robusto de PDO, Patrón Singleton y Transacciones ACID.
- 🔐 **Seguridad Ofensiva/Defensiva:** Prevención de SQLi, XSS, CSRF y Session Hijacking (con casos de hackeo reales).
- 🛡️ **Autenticación:** Hashing moderno (Argon2id/Bcrypt), gestión segura de sesiones y control de acceso por roles (RBAC).
- 🛠️ **Ingeniería de Software:** Validación centralizada, depuración profesional (logging) y cultura de despliegue.

---

## 🚀 Inicio Rápido (Para Estudiantes)

Sigue estos pasos para configurar tu entorno de trabajo con la estructura base proporcionada:

1. **Clona este repositorio** en tu carpeta de servidor local (ej. `htdocs`, `www` o tu entorno Docker):
   ```bash
   git clone https://github.com/TU_USUARIO/guia-php-seguro.git
   cd guia-php-seguro
   ```

2. **Genera la estructura base del proyecto:**  
   Ejecuta el script generador incluido. Esto creará las carpetas `app`, `config`, `public` y `storage` con los archivos base funcionales.
   ```bash
   php generador_proyecto.php
   ```
   *(Si usas XAMPP/Laragon, también puedes visitar `http://localhost/guia-php-seguro/generador_proyecto.php` en tu navegador).*

3. **Explora la guía:**  
   Abre el archivo `index.html` en tu navegador web para comenzar a estudiar los módulos interactivos.

---

## 📂 Estructura de este Repositorio

Este repositorio contiene la documentación interactiva y las herramientas para comenzar tu proyecto:

```text
📦 guia-php-seguro
 ┣ 📄 README.md                 # Este archivo de documentación
 ┣ 📄 generador_proyecto.php    # Script para crear la estructura base del proyecto
 ┣ 📄 index.html                # Módulo 1: Anatomía y Estructura
 ┣ 📄 base-datos.html           # Módulo 2: Base de Datos Avanzada (PDO)
 ┣ 📄 seguridad.html            # Módulo 3: Seguridad y Autenticación
 ┣ 📄 arquitectura.html         # Módulo 4: Arquitectura, Validación y Debugging
 ┣ 📄 recursos.html             # Módulo 5: Checklist de Producción y Glosario
 ┣ 📄 styles.css                # Hoja de estilos compartida (con modo oscuro/claro)
 ┗ 📄 script.js                 # Lógica de interfaz (temas y navegación activa)
```

---

## 📚 Requisitos Previos

Para aprovechar al máximo este material, se asume que el estudiante ya domina:
- ✅ Programación Orientada a Objetos en PHP (Clases, Herencia, Interfaces, Encapsulamiento).
- ✅ HTML Semántico, CSS Moderno y JavaScript básico.
- ✅ Conceptos fundamentales de UX/UI y diseño responsivo.

**Requisitos técnicos del entorno:**
- PHP 8.0 o superior (Recomendado 8.2+ para aprovechar las últimas mejoras de seguridad y tipado estricto).
- Servidor web local (Apache/Nginx) con la extensión `pdo_mysql` habilitada.

---

## ⚠️ Integridad Académica

> **Nota para el estudiante:** Esta guía es un material de referencia y aprendizaje. Los fragmentos de código (como la clase `Database`, `Validator` o `Middleware`) están diseñados para ser estudiados, entendidos y adaptados a tu proyecto final. **Copiar y pegar sin comprender la lógica subyacente (especialmente en temas de seguridad) resultará en vulnerabilidades críticas y penalizaciones en la evaluación.**

---

## 🌐 Visualización en Línea

Si el repositorio está configurado con **GitHub Pages**, puedes navegar por la guía interactiva sin descargarla localmente haciendo clic en el siguiente enlace:

🔗 **[Ver Guía Interactiva en GitHub Pages](https://profcs-clases.github.io/guia-php-seguro/index.html)**  
*(Recuerda reemplazar `TU_USUARIO` con el nombre real de tu usuario o organización de GitHub)*

---

## 🤝 Contribuciones y Soporte

- ¿Encontraste un error tipográfico o un bug en el código de ejemplo? ¡Abre un **Issue**!
- ¿Tienes una sugerencia para mejorar un caso de estudio? Las **Pull Requests** son bienvenidas.

---

## 📜 Licencia

Este material es de uso académico y educativo. Se permite su modificación y distribución siempre que se mantenga la atribución al autor original y a la institución educativa.

_Desarrollado con 💙 para la formación de la próxima generación de ingenieros de software._
```
