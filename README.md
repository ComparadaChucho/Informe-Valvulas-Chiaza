# Proyecto: Sistema de Informes de Calibración de Válvulas

## Descripción

Este proyecto consiste en una aplicación web diseñada para facilitar la generación de informes de calibración de válvulas en una empresa especializada. Actualmente, el proceso de creación de estos informes se realiza manualmente en documentos de Word, lo que resulta ineficiente y propenso a errores. Con esta herramienta, los técnicos pueden completar formularios estructurados que generan informes de manera rápida y precisa, optimizando el flujo de trabajo.

## Características Principales

- **Generación Automática de Informes:** Permite crear informes de calibración de manera estructurada y sin errores de formato.
- **Interfaz Intuitiva:** Diseño simple y eficiente que facilita la carga de datos.
- **Selección de Empresas y Tipos de Válvulas:** Integración con una base de datos que almacena opciones predefinidas para evitar errores de entrada.
- **Exportación de Informes:** Opción para descargar los informes en formato PDF.
- **Gestión de Registros:** Posibilidad de consultar informes previos.

## Tecnologías Utilizadas

- **Backend:** Laravel (PHP) con SQLite como base de datos.
- **Frontend:** Tailwind CSS para el diseño de la interfaz.
- **Base de Datos:** SQLite para almacenamiento ligero y eficiente.
- **Despliegue:** Puede ser ejecutado localmente o desplegado en un servidor web.

## Instalación y Configuración

### Requisitos

- PHP 8.0+
- Composer
- SQLite o MySQL
- Node.js (para compilar los assets de frontend con Vite)

### Pasos de Instalación

1. Clonar el repositorio:
   ```sh
   git clone https://github.com/tu-usuario/tu-repositorio.git
   cd tu-repositorio
   ```
2. Instalar dependencias de PHP:
   ```sh
   composer install
   ```
3. Instalar dependencias de frontend:
   ```sh
   npm install && npm run dev
   ```
4. Configurar el entorno:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
5. Configurar la base de datos en el archivo `.env` y ejecutar las migraciones:
   ```sh
   php artisan migrate --seed
   ```
6. Iniciar el servidor:
   ```sh
   php artisan serve
   ```

## Uso

1. Acceder a la URL generada por el servidor (`http://127.0.0.1:8000`).
2. Completar los formularios con los datos de calibración de las válvulas.
3. Generar el informe automáticamente.
4. Descargar el informe en PDF o almacenarlo en la base de datos para futuras consultas.

## Contribuciones

Este proyecto está en desarrollo y cualquier sugerencia o mejora es bienvenida. Si deseas contribuir:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature-nueva-caracteristica`).
3. Realiza los cambios y haz un commit (`git commit -m 'Añadida nueva característica'`).
4. Sube los cambios (`git push origin feature-nueva-caracteristica`).
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la licencia MIT. Puedes utilizarlo y modificarlo libremente, pero se agradece el reconocimiento a los autores.

---

**Autor:** Juan Pablo Comparada\
📧 Contacto: juanpablocomparada@gmail.com\
🌍 Más proyectos en: [GitHub](https://github.com/ComparadaChucho)\