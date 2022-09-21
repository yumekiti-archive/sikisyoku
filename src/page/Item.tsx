import { FC } from 'react';
import { useParams } from 'react-router-dom';

const Item: FC = () => {
  const { id } = useParams();

  return (
    <h1 className="text-3xl font-bold underline">
      Hello items {id}
    </h1>
  )
}

export default Item;