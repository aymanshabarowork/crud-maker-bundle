<?= "<?php\n"; ?>

namespace App\Form;

use App\Entity\<?= $entity_class_name; ?>;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class <?= $form_class_name; ?> extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            <?php foreach ($entity_fields as $field): ?><?php if ($field['fieldName'] !== $entity_identifier): ?>->add('<?= $field['fieldName']; ?>')
        <?php endif; ?><?php endforeach; ?>;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => <?= $entity_class_name; ?>::class,
        ]);
    }
}
