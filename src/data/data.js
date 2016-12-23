const mock = {
  'username': 'silentsvv',
  'password': '123',
  article: [
    {
      id: 1,
      title: 'this is one',
      content: 'this is content',
      date: '2016/02/01'
    },
    {
      id:2,
      title: 'this is two',
      content: 'this is content',
      date: '2016/02/01'
    },
    {
      id:3,
      title: 'this is three',
      content: 'this is content',
      date: '2016/02/01'
    },
    {
      id:4,
      title: 'this is four',
      content: 'this is content',
      date: '2016/02/01'
    }
  ],
  comments: [
    {
      id: 1,
      article_id: 1,
      user_id: 1,
      username: 'silentsvv',
      date: '2010/02/01',
      content: 'cocococoococcccccooooooooosaaaaaa'
    },{
      id: 1,
      article_id: 1,
      user_id: 1,
      username: 'hey',
      date: '2010/02/01',
      content: 'asasa'
    },{
      id: 1,
      article_id: 1,
      user_id: 1,
      username: 'asasa',
      date: '2010/02/01',
      content: 'cocococoasococcccccooooooooosaaaaaa'
    }
  ]
}
export default mock;