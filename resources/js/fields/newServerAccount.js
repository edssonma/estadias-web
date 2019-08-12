export default [
    {
        name: 'Nombre',
        type: 'text',
        placeholder: 'Ingresar nombre',
        field: {
            name: 'nombre',
            value: null
        }
    },
    {
        name: 'Apellido paterno',
        type: 'text',
        placeholder: 'Ingresar apellido paterno',
        field: {
            name: 'apellido_paterno',
            value: null
        }
    },
    {
        name: 'Apellido materno',
        type: 'text',
        placeholder: 'Ingresar apellido materno',
        field: {
            name: 'apellido_materno',
            value: null
        }
    },
    {
        name: 'Usuario',
        type: 'text',
        placeholder: 'Ingresar usuario',
        field: {
            name: 'username',
            value: null
        }
    },
    {
        name: 'Correo electrónico',
        type: 'email',
        placeholder: 'Ingresar correo electrónico',
        field: {
            name: 'email',
            value: null
        }
    },
    {
        name: 'Contraseña',
        type: 'password',
        placeholder: 'Ingresar contraseña',
        field: {
            name: 'password',
            value: null
        }
    },
    {
        name: 'Rol',
        type: 'select',
        placeholder: 'Seleccionar rol',
        field: {
            name: 'role_id',
            value: 1
        },
        options:[
            {name: 'Administrador', value: '1'},
            {name: 'PTC', value: '2'},
        ]
    },
  ]
  