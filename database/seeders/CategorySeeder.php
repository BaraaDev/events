<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->setTranslation('name', 'en', 'Birthday Parties')
            ->setTranslation('name', 'ar', 'حفلات أعياد الميلاد')
            ->setTranslation('name', 'fr', "Fêtes d'anniversaire");
        $category->setTranslation('content', 'en', "Celebrating one's birthday is a special event that's meant to be shared with loved ones. Adults enjoy parties as much as children and it's really nice when people honour your birthday by sharing the day with you. If you are celebrating an important milestone, it is usually very hard to plan and organise perfectly. Here comes our job to shorten the time and end the suffering. All you need to do is to upload your needs and all the offers will come to your desk.")
            ->setTranslation('content', 'ar', 'الاحتفال بعيد ميلاد المرء هو حدث خاص من المفترض أن يشاركه الأحباء. يستمتع البالغون بالحفلات مثلهم مثل الأطفال ، ومن الجميل حقًا أن يحتفل الناس بعيد ميلادك من خلال مشاركة هذا اليوم معك. إذا كنت تحتفل بحدث هام ، فعادة ما يكون من الصعب جدًا التخطيط والتنظيم بشكل مثالي. هنا تأتي مهمتنا لاختصار الوقت وإنهاء المعاناة. كل ما عليك فعله هو تحميل احتياجاتك وستصل جميع العروض إلى مكتبك.')
            ->setTranslation('content', 'fr', "Célébrer son anniversaire est un événement spécial qui se veut être partagé avec ses proches. Les adultes aiment les fêtes autant que les enfants et c'est vraiment agréable quand les gens honorent votre anniversaire en partageant la journée avec vous. Si vous célébrez une étape importante, il est généralement très difficile de planifier et d'organiser parfaitement. Voici notre travail pour raccourcir le temps et mettre fin à la souffrance. Tout ce que vous avez à faire est de télécharger vos besoins et toutes les offres arriveront sur votre bureau.");
        $category->create_user_id = 3;
        $category->icon = 'svg/birthday-parties.svg';
        $category->color = 'rgb(243, 142, 142)';
        $category->save();


        $category = new Category();
        $category->setTranslation('name', 'en', 'Catering')
            ->setTranslation('name', 'ar', 'تقديم الطعام')
            ->setTranslation('name', 'fr', "Services d'alimentation");
        $category->setTranslation('content', 'en', 'Hosting a family gathering, celebration or an event be really tricky, but have no worries! We have collected and partnered with the best catering companies in Egypt to save your parties. The catering companies we choose to partnered with are based on the quality and variety of food provided, pricing, hygiene and ability to deliver on time.')
            ->setTranslation('content', 'ar', 'قد تكون استضافة تجمع عائلي أو احتفال أو حدث أمرًا صعبًا حقًا ، ولكن لا داعي للقلق! لقد جمعنا وشاركنا مع أفضل شركات التموين في مصر لحفظ حفلاتك. تعتمد شركات تقديم الطعام التي نختار الشراكة معها على جودة وتنوع الأطعمة المقدمة ، والتسعير ، والنظافة والقدرة على التسليم في الوقت المحدد.')
            ->setTranslation('content', 'fr', "Organiser une réunion de famille, une fête ou un événement peut être très délicat, mais ne vous inquiétez pas ! Nous avons rassemblé et collaboré avec les meilleures entreprises de restauration en Égypte pour sauver vos fêtes. Les entreprises de restauration avec lesquelles nous choisissons de nous associer sont basées sur la qualité et la variété des aliments fournis, les prix, l'hygiène et la capacité à livrer à temps.");
        $category->create_user_id = 2;
        $category->icon = 'svg/catering.svg';
        $category->color = 'rgb(241, 148, 47)';
        $category->save();

        $category = new Category();
        $category->setTranslation('name', 'en', 'Engagements')
            ->setTranslation('name', 'ar', 'الخطوبات')
            ->setTranslation('name', 'fr', 'Fiançailles');
        $category->setTranslation('content', 'en', 'Congratulations, you’re engaged! The early weeks of your engagement are exciting as you share the news and think about the celebratory events that are in your future. One of the first things to organize and plan is an engagement party, where you can celebrate this life-changing event with your closest family and friends in person! While not as grandiose and involved as a wedding, it does require planning. In this article, we will cover the basics of how to plan an engagement party, who to invite, and engagement party etiquette so your first wedding celebration is as fun and stress-free to plan as it is to attend.')
            ->setTranslation('content', 'ar', 'تهانينا ، أنت مخطوب! الأسابيع الأولى من خطوبتك مثيرة لأنك تشارك الأخبار وتفكر في الأحداث الاحتفالية في مستقبلك. من أول الأشياء التي يجب تنظيمها والتخطيط لها هي حفلة خطوبة ، حيث يمكنك الاحتفال بهذا الحدث الذي يغير حياتك مع أقرب عائلتك وأصدقائك شخصيًا! على الرغم من أنه ليس عظيماً ومشاركاً مثل حفل الزفاف ، إلا أنه يتطلب التخطيط. في هذه المقالة ، سوف نغطي أساسيات كيفية التخطيط لحفلة خطوبة ، ومن يجب أن تدعوه ، وآداب حفلة الخطوبة حتى يكون حفل زفافك الأول ممتعًا وخاليًا من الإجهاد كما هو الحال بالنسبة للحضور.')
            ->setTranslation('content', 'fr', "Félicitations, vous êtes fiancés ! Les premières semaines de vos fiançailles sont passionnantes alors que vous partagez les nouvelles et pensez aux événements de célébration qui sont dans votre avenir. L'une des premières choses à organiser et à planifier est une fête de fiançailles, où vous pourrez célébrer cet événement qui change la vie avec votre famille et vos amis les plus proches en personne ! Bien qu'il ne soit pas aussi grandiose et impliqué qu'un mariage, il nécessite une planification. Dans cet article, nous aborderons les bases de la planification d'une fête de fiançailles, qui inviter et l'étiquette de la fête de fiançailles afin que votre première célébration de mariage soit aussi amusante et sans stress à planifier qu'à y assister.");
        $category->create_user_id = 1;
        $category->icon = 'svg/engagement-ring.svg';
        $category->color = '#394B6C';
        $category->save();

        $category = new Category();
        $category->setTranslation('name', 'en', 'Conferences')
            ->setTranslation('name', 'ar', 'المؤتمرات')
            ->setTranslation('name', 'fr', 'Conférences');
        $category->setTranslation('content', 'en', 'So you’ve decided to organise a conference. Quite a task! You must have a million questions on your mind. Where do you start? How do you find the right speakers to invite? Which venue will best suit your needs? Not to worry, We’ve prepared everything possible you can ask for through the small business owners available on our website. These gentlemen can provide you anything needed from various elegant themes to hosting. Moreover, with a highly competitive budgets.')
            ->setTranslation('content', 'ar', 'لذلك قررت تنظيم مؤتمر. إنها مهمة! يجب أن يكون لديك مليون سؤال في ذهنك. من أين تبدأ؟ كيف تجد المتحدثين المناسبين لدعوتهم؟ أي مكان يناسب احتياجاتك على أفضل وجه؟ لا داعي للقلق ، لقد أعددنا كل ما يمكن أن تطلبه من خلال أصحاب الأعمال الصغيرة المتاحين على موقعنا. يمكن لهؤلاء السادة أن يوفروا لك كل ما تحتاجه من موضوعات أنيقة متنوعة إلى الاستضافة. علاوة على ذلك ، مع ميزانيات تنافسية للغاية.')
            ->setTranslation('content', 'fr', "Vous avez donc décidé d'organiser une conférence. Toute une tâche ! Vous devez avoir un million de questions en tête. Par où commencer ? Comment trouver les bons orateurs à inviter ? Quel lieu répondra le mieux à vos besoins ? Ne vous inquiétez pas, nous avons préparé tout ce que vous pouvez demander par l'intermédiaire des propriétaires de petites entreprises disponibles sur notre site Web. Ces messieurs peuvent vous fournir tout ce dont vous avez besoin, de divers thèmes élégants à l'hébergement. De plus, avec des budgets très compétitifs.");
        $category->create_user_id = 2;
        $category->icon = 'svg/conferences.svg';
        $category->color = 'rgb(145, 34, 34)';
        $category->save();

        $category = new Category();
        $category->setTranslation('name', 'en', 'Barber/Hairdresser')
            ->setTranslation('name', 'ar', 'حلاق / مصفف شعر')
            ->setTranslation('name', 'fr', 'Barbier/Coiffeur');
        $category->setTranslation('content', 'en', 'Having a wedding? conference? Prom? or any other kind of event? You will definitely need to grab the best style! and when we say style, your hair shape automatically pop-up. This is when GDP comes to handy as we deliver wide varieties of barber and/or hairdresser shops with excellent qualities, scheduled timings and best prices, in addition to give-away offers if you were lucky enough.')
            ->setTranslation('content', 'ar', 'حفل زفاف؟ مؤتمر؟ حفلة موسيقية؟ أو أي نوع آخر من الأحداث؟ سوف تحتاج بالتأكيد إلى الحصول على أفضل أسلوب! وعندما نقول أسلوب ، ينبثق شكل شعرك تلقائيًا. هذا عندما يكون الناتج المحلي الإجمالي مفيدًا حيث نقدم مجموعة متنوعة من محلات الحلاقة و / أو تصفيف الشعر ذات الصفات الممتازة والمواعيد المحددة وأفضل الأسعار ، بالإضافة إلى عروض الهدية إذا كنت محظوظًا بما فيه الكفاية.')
            ->setTranslation('content', 'fr', "Avoir un mariage? conférence? Bal de promo? ou tout autre type d'événement ? Vous aurez certainement besoin de saisir le meilleur style! et lorsque nous disons style, la forme de vos cheveux apparaît automatiquement. C'est à ce moment-là que GDP devient utile, car nous proposons une grande variété de salons de coiffure et / ou de salons de coiffure avec d'excellentes qualités, des horaires programmés et les meilleurs prix, en plus d'offres promotionnelles si vous avez eu la chance.");
        $category->create_user_id = 4;
        $category->icon = 'svg/barber-hairdresser.svg';
        $category->color = 'rgb(200, 202, 74)';
        $category->save();

        $category = new Category();
        $category->setTranslation('name', 'en', "Groom's & Bride's Attires")
            ->setTranslation('name', 'ar', 'ملابس العريس والعروس')
            ->setTranslation('name', 'fr', 'Tenues du marié et de la mariée');
        $category->setTranslation('content', 'en', 'When choosing wedding clothes, many couples are guided not only by fashion, but also by convention and a dose of decorum befitting the event. This makes it even harder to land a choice, therefore, we provide you a unique service where you can upload an exact description of the clothes you coubles or even 1 person needs and our suppliers will contact you for faster, easier, cheaper and perfect choice.')
            ->setTranslation('content', 'ar', 'عند اختيار ملابس الزفاف ، لا يسترشد العديد من الأزواج بالموضة فحسب ، بل أيضًا بالعرفان وجرعة من اللياقة التي تلائم الحدث. هذا يجعل الأمر أكثر صعوبة في الوصول إلى خيار ، لذلك ، نقدم لك خدمة فريدة حيث يمكنك تحميل وصف دقيق للملابس التي تقوم بتجميعها أو حتى يحتاجها شخص واحد وسيتصل بك موردينا للحصول على خيار أسرع وأسهل وأرخص وأمثل.')
            ->setTranslation('content', 'fr', "Lors du choix d'une tenue de mariage, de nombreux couples sont guidés non seulement par la mode, mais aussi par la gratitude et une dose de décorum qui correspond à l'événement. Cela rend plus difficile de faire un choix, par conséquent, nous vous offrons un service unique où vous pouvez télécharger une description précise des vêtements que vous collectez ou même des besoins d'une personne et nos fournisseurs vous contacteront pour un plus rapide, plus facile, option moins chère et optimale.");
        $category->create_user_id = 5;
        $category->icon = 'svg/grooms-and-brides-attires.svg';
        $category->color = 'rgb(112, 205, 236)';
        $category->save();

    }
}
