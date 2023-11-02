export function showError (error) {
    alert('Произошла ошибка при выполнении запроса. Проверьте консоль.')
    throw new Error(error)
}