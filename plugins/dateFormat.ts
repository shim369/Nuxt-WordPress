import { format } from 'date-fns'

export default defineNuxtPlugin(() => {
  const dateFormat = 'yyyy.MM.dd'
  return {
    provide: {
      formatDate: (date: string) => format(new Date(date), dateFormat),
    },
  }
})