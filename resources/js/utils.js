export function showError (error) {
    if (error.response && error.response.status == 404) {
        return
    }

    alert('Произошла ошибка при выполнении запроса. Проверьте консоль.')
    throw new Error(error)
}